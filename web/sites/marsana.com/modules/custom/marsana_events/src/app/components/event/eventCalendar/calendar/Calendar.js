import React, { Fragment, useEffect, useState } from "react";
// import sampleImg from "./../../../../assets/images/sample.png";
// import calenderData from "./../calendarData.json";

const Calendar = (props) => {
  const [eventCardColor, setEventCardColor] = useState("transparent");
  const [eventCardInfo, setEventCardInfo] = useState({});
  const [EventCardExpendedNumber, setEventCardExpendedNumber] = useState(0);
  const [expendedEventDate, setExpendedEventDate] = useState(0);
  const [multiEventCurrNumber, setMultiEventCurrNumber] = useState(1);
  const [currClickedEvent, setCurrClickedEvent] = useState(undefined);
  const isArabic = location.pathname.includes("ar");
  const calenderItems = [];
  let calenderRow = [];
  const startDay = props.monthStartDay;
  const totalDays = 42;
  let dayCount = 1;
  let eventData;
  let prevEventDate = 0;
  let prevEventTwoColor = 0;
  let prevEventDateRow = 0;
  let monthArr = [
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
  ];

  if (props.calenderData.years.length > 0) {
    eventData =
      props.calenderData.events[props.activeYear][
        `${props.activeMonth.toLocaleLowerCase()}`
      ] || {};
  } else {
    eventData = {};
  }
  useEffect(() => {
    if (!props.isEventCardExpended) {
      document
        .querySelectorAll(".event-block")
        .forEach((el) => (el.style.backgroundColor = "#fff"));
    }
  }, [props.isEventCardExpended]);
  useEffect(() => {
    const calenderItem = document.querySelectorAll(`.calender-item`);
    calenderItem.forEach((item) => (item.style.backgroundColor = "#fff"));
    setEventCardColor("transparent");
    setEventCardInfo({});
    setEventCardExpendedNumber(0);
    setExpendedEventDate(0);
    setMultiEventCurrNumber(1);
    setCurrClickedEvent(0);
  }, [props.activeMonth]);
  const onEventClick = (rowNumber, clickedDate, color, subData, event) => {
    setCurrClickedEvent(event.target);
    setMultiEventCurrNumber(1);
    setEventCardInfo(eventData[clickedDate][subData]);
    event.target.style.backgroundColor = color;
    if (expendedEventDate === clickedDate) {
      props.setIsEventCardExpended((state) => !state);
      event.target.childNodes[0].classList.toggle("color-bg-active");
    } else {
      props.setIsEventCardExpended(true);
      setEventCardExpendedNumber(rowNumber < 6 ? rowNumber : rowNumber - 1);
      setExpendedEventDate(clickedDate);
      document
        .querySelectorAll(".color-bg")
        .forEach((el) => el.classList.remove("color-bg-active"));
      event.target.childNodes[0].classList.add("color-bg-active");
    }
    setEventCardColor(color);
  };

  const onMultiEventClick = () => {
    if (multiEventCurrNumber === eventData[expendedEventDate].eventCount) {
      setEventCardInfo(eventData[expendedEventDate][`data${1}`]);
      const color = eventData[expendedEventDate][`color${1}`];
      setEventCardColor(color);
      setMultiEventCurrNumber(1);
      currClickedEvent.style.backgroundColor = color;
    } else {
      setEventCardInfo(
        eventData[expendedEventDate][`data${multiEventCurrNumber + 1}`]
      );
      const color =
        eventData[expendedEventDate][`color${multiEventCurrNumber + 1}`];
      setEventCardColor(color);
      setMultiEventCurrNumber((prevState) => prevState + 1);
      currClickedEvent.style.backgroundColor = color;
    }
  };
  
  if (props.calenderData.years.length > 0)
    for (let i = 1; i <= 11; i++) {
      const rowNumber = Math.floor(i / 2) + 1;
      calenderRow = [];
      if (i === 2 || i === 4 || i === 6 || i === 8 || i === 10) {
        calenderItems.push(
          <div
            key={`R${dayCount}`}
            data-card={`${rowNumber - 1}`}
            className="event-info"
            style={{ backgroundColor: eventCardColor }}
          >
            {props.isEventCardExpended &&
              EventCardExpendedNumber === rowNumber - 1 && (
                <div className="event-info-inner">
                  <div className="event-info-header">
                    <div className="event">
                      <h4>{eventCardInfo.name}</h4>
                      <p>{eventCardInfo.duration}</p>
                    </div>
                    <button
                      className="close-btn"
                      onClick={() => {
                        props.setIsEventCardExpended(false);
                        currClickedEvent.childNodes[0].classList.remove(
                          "color-bg-active"
                        );
                      }}
                    >
                      &times;
                    </button>
                  </div>
                  <div className="event-info-container">
                    <div className="event-info-text">
                      {eventCardInfo.paras.map((para) => (
                        <p
                          key={para.id}
                          dangerouslySetInnerHTML={{ __html: para.text }}
                        ></p>
                      ))}
                    </div>
                    <div className="event-info-images">
                      <img src={eventCardInfo.imgUrls[0]} alt="group" />
                      <img src={eventCardInfo.imgUrls[1]} alt="group" />
                    </div>
                  </div>
                  {eventData[expendedEventDate] &&
                    eventData[expendedEventDate].eventCount > 1 &&
                    multiEventCurrNumber <=
                      eventData[expendedEventDate].eventCount && (
                      <div className="multievent-btn-container">
                        <button onClick={onMultiEventClick}>
                          <img
                            src="/sites/marsana.com/modules/custom/marsana_events/src/app/assets/images/leaf.svg"
                            alt="leaf"
                          />
                          {isArabic ? "تحقق أيضا" : "Also Check"}
                          <span style={{ direction: isArabic ? "ltr" : "rtl" }}>
                            {multiEventCurrNumber ===
                            eventData[expendedEventDate].eventCount
                              ? eventData[expendedEventDate].data1.tag
                              : eventData[expendedEventDate][
                                  `data${multiEventCurrNumber + 1}`
                                ].tag}
                          </span>
                        </button>
                      </div>
                    )}
                </div>
              )}
          </div>
        );
      } else {
        if (dayCount <= totalDays) {
          for (let k = 1; k <= 7; k++) {
            const index = monthArr.findIndex((month) => month === props.activeMonth);
            const max_days = new Date(props.activeYear, index + 1, 0).getDate() - 1;
            if (dayCount >= startDay && dayCount <= max_days + startDay) {
              const date = dayCount - startDay + 1;
              let style = {};
              const event = eventData[date];
              if (event) {
                prevEventDate = date;
                prevEventDateRow = i;
                if (event.eventCount === 1) {
                  style["backgroundColor"] = event.color1;
                  prevEventTwoColor = event.color1;
                } else if (event.eventCount === 2) {
                  if (prevEventDateRow <= i && prevEventDate !== 0) {
                    style[
                      "background"
                    ] = `linear-gradient(to bottom right,${event.color1} 0%,${event.color1} 50%,${event.color2} 50%,${event.color2} 100%)`;
                  } else {
                    style[
                      "background"
                    ] = `linear-gradient(to top right,${event.color1} 0%,${event.color1} 50%,${event.color2} 50%,${event.color2} 100%)`;
                  }
                  style["border"] = `none`;
                } else if (event.eventCount === 3) {
                  style["borderTopColor"] = `${event.color1}`;
                  // style["borderRightColor"] = `${event.color2}`;
                  if (event.nextEvent) {
                    style["borderRightColor"] = `${event.nextEvent.color}`;
                  } else {
                    style["borderRightColor"] = `${event.color2}`;
                  }

                  style["borderBottomColor"] = `${event.color3}`;
                  style["borderLeftColor"] = `${prevEventTwoColor}`;
                  // if (prevEventDateRow <= i && prevEventDate !== 0) {
                  // } else {4
                  //   style["borderLeftColor"] = `${event.color2}`;
                  // }
                } else if (event.eventCount === 4) {
                  style["borderTopColor"] = `${event.color1}`;
                  style["borderRightColor"] = `${event.color3}`;
                  style["borderBottomColor"] = `${event.color4}`;
                  style["borderLeftColor"] = `${event.color2}`;
                }
                calenderRow.push(
                  <div
                    key={`B${dayCount}`}
                    className="calender-item event-block"
                    onClick={onEventClick.bind(
                      null,
                      rowNumber,
                      date,
                      event.color1,
                      "data1"
                    )}
                  >
                    <div className="color-bg" style={style}></div>
                    <span className="date">{date}</span>
                    <span className="event-name">{event.data1.tag}</span>
                  </div>
                );
              } else {
                calenderRow.push(
                  <div key={`B${dayCount}`} className="calender-item">
                    <span className="date">{date}</span>
                  </div>
                );
              }
            } else {
              calenderRow.push(
                <div key={`B${dayCount}`} className="calender-item">
                  <span></span>
                </div>
              );
            }

            dayCount++;
          }
        }
        calenderItems.push(
          <div key={dayCount} className="calender-inner">
            {calenderRow}
          </div>
        );
      }
    }
  return <Fragment>{calenderItems}</Fragment>;
};

export default Calendar;

