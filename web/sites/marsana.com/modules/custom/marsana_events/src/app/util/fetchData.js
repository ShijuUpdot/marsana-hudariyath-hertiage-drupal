import React from "react";
import { useCallback, useEffect, useMemo, useState } from "react";
import axios from "axios";
const dataEvent = {
  events: {
    2022: {},
  },
};
const eventTotal = {
  Jan: 0,
  Feb: 0,
  Mar: 0,
  Apr: 0,
  May: 0,
  Jun: 0,
  Jul: 0,
  Aug: 0,
  Sep: 0,
  Oct: 0,
  Nov: 0,
  Dec: 0,
};
let prevDate = 0;
const useFetchData = () => {
  const [apiData, setApiData] = useState([]);
  const [data, setData] = useState({});
  const isArabic = location.pathname.includes("ar");

  const months = useMemo(
    () => [
      "Jan",
      "Feb",
      "Mar",
      "Apr",
      "May",
      "Jun",
      "Jul",
      "Aug",
      "Sep",
      "Oct",
      "Nov",
      "Dec",
    ],
    []
  );
  const url = useMemo(
    () =>
      "https://www.marsana.ae/" +
      drupalSettings.marsana_events.marsana_js.CurrentLang +
      "/fetch-events",
    []
  );

  //   useEffect(() => {

  //   }, [url]);

  const setEventData = useCallback(
    (date, eventMonth, eventYear, event, tag) => {
      let year;
      if (!(eventYear in dataEvent.events)) {
        year = dataEvent.events[eventYear] = {};
      } else {
        year = dataEvent.events[eventYear];
      }
      let month;
      if (!(months[eventMonth].toLocaleLowerCase() in year)) {
        month = year[months[eventMonth].toLocaleLowerCase()] = {};
      } else {
        month = year[months[eventMonth].toLocaleLowerCase()];
      }
      if (prevDate in month) {
        month[prevDate]["nextEvent"] = {
          date: date,
          color: event.field_color[0].color,
        };
      }
      prevDate = date;
      if (!(date in month)) {
        const paras = event.body[0].value.split("&lt;&amp;/&gt;");
        month[date] = {
          eventCount: 1,
          color1: event.field_color[0].color,
          name: [event.title[0].value],
          data1: {
            name: event.title[0].value,
            tag,
            duration: event.field_top_description[0].value,
            imgUrls: event.field_events_image.map((img) => img.url),
            paras: paras.map((para, i) => {
              return {
                id: `p${i + 1}`,
                text: para,
              };
            }),
          },
        };
      } else {
        const eventDay = month[date];
        const eventCount = eventDay.eventCount + 1;
        eventDay.eventCount += 1;
        eventDay[`color${eventCount}`] = event.field_color[0].color;
        eventDay.name.push(event.title[0].value);
        eventDay[`data${eventCount}`] = {
          name: event.title[0].value,
          tag,
          duration: event.field_top_description[0].value,
          imgUrls: event.field_events_image.map((img) => img.url),
          paras: [
            {
              id: "p1",
              text: event.body[0].value,
            },
          ],
        };
      }
    },
    [months]
  );
  useEffect(() => {
    if (apiData.length > 0) {
      setApiData(apiData.reverse());
      apiData.forEach((event) => {
        // const dateStart = new Date(event.field_event_date[0].value);
        // const dateEnd = new Date(event.field_event_date[1].value);
        // let end = dateEnd.getDate();
        let month;
        event.field_event_date.forEach((eventDate) => {
          const date = new Date(eventDate.value);
          let start = date.getDate();
          month = months[date.getMonth()];
          let tag;
          if (isArabic) {
            tag = `حدث ${eventTotal[months[date.getMonth()]] + 1}`;
          } else {
            tag = `Event ${eventTotal[months[date.getMonth()]] + 1}`;
          }
          setEventData(start, date.getMonth(), date.getFullYear(), event, tag);
        });
        eventTotal[month]++;
        // if (end > start) {
        //   while (start !== end + 1) {
        //     start++;
        //   }
        // } else {
        //   setEventData(
        //     dateStart.getDate(),
        //     dateStart.getMonth(),
        //     dateStart.getFullYear(),
        //     event
        //   );
        // }
      });
      var years = [];

      for (var key in dataEvent.events) years.push(parseInt(key));
      dataEvent["years"] = years;
      setData(dataEvent);
    }
  }, [apiData, setEventData]);

  useEffect(() => {
    axios.get(url).then((response) => {
      setApiData(response.data);
    });
  }, [url]);
  return data;
};
export default useFetchData;

