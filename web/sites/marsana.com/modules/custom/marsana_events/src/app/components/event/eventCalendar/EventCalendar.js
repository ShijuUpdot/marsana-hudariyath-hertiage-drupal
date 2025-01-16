import React from "react";
import { useEffect, useMemo, useState } from "react";

// import calenderData from "./calendarData.json";
import Calendar from "./calendar/Calendar.js";
import useFetchData from "../../../util/fetchData";
const EventCalender = () => {
  const data = useFetchData();
  const [calenderData, setCalenderData] = useState({ years: [] });
  let currentYear = new Date().getFullYear();
  const [activeYear, setActiveYear] = useState(currentYear);
  const [monthStartDay, setMonthStartDay] = useState(1);
  const [activeMonth, setActiveMonth] = useState("");

  const [isEventCardExpended, setIsEventCardExpended] = useState(false);
  useEffect(() => {
    if (data.years) setCalenderData(data);
  }, [data]);
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

  useEffect(() => {
    const date = new Date();
    setActiveMonth(months[date.getMonth()]);
  }, [months]);
  useEffect(() => {
    const index = months.findIndex((month) => month === activeMonth);
    const firstDay = new Date(activeYear, index, 1);
    setMonthStartDay(firstDay.getDay() + 1);
  }, [activeYear, activeMonth, months]);
  return (
    <div className="calendar-wrapper">
      <div className="head">
        <h3>Event Calendar</h3>
        {/* <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare
          porttitor diam.
        </p> */}
      </div>
      <div className="calendar-container">
        <div className="calendar-months">
          <div className="calendar-year-container">
            <ul>
              {calenderData.years.map((year, i) => {
                // @todo updot may be here need improvements
                if (year == new Date().getFullYear() || year == (new Date().getFullYear() + 1)) {
                  return (
                    <li
                      key={i}
                      className={`${activeYear === year ? "active" : ""}`}
                      onClick={() => {
                        setActiveYear(year);
                      }}
                    >
                      {year}
                    </li>
                  )
                }
              }
              )}
            </ul>
          </div>
          <div className="calendar-months-container">
            <ul className="calendar-months-list">
              {months.map((month, i) => (
                <li
                  key={i}
                  className={`calendar-month ${
                    activeMonth === month ? "active" : ""
                  }`}
                  onClick={() => setActiveMonth(month)}
                >
                  {month}
                </li>
              ))}
            </ul>
          </div>
        </div>
        <div className="calendar-outer">
          <div className="calendar-main">
            <ul className="calendar-label">
              {["S", "M", "T", "W", "T", "F", "S"].map((day, i) => (
                <li key={i}>{day}</li>
              ))}
            </ul>
            <div className="calender">
              <div className="calendar-wrapper-inner">
                <Calendar
                  calenderData={calenderData}
                  monthStartDay={monthStartDay}
                  setIsEventCardExpended={setIsEventCardExpended}
                  isEventCardExpended={isEventCardExpended}
                  activeYear={activeYear}
                  activeMonth={activeMonth}
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default EventCalender;

