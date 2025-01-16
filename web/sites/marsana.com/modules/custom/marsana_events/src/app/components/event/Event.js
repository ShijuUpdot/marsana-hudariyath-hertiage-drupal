import React from "react";
import EventCalendar from "./eventCalendar/EventCalendar.js";
import EventLanding from "./eventLanding/EventLanding.js";
const Event = () => {
  return (
    <div className="event">
      <EventLanding />
      <EventCalendar />
    </div>
  );
};

export default Event;
