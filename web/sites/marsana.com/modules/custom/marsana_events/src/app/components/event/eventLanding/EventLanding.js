import React, { useEffect, useState } from "react";
const EventLanding = () => {
  const [apiData, setApiData] = useState({
    title: "",
    description: "",
    homeBanner: "",
  });
  const isArabic = location.pathname.includes("ar");

  useEffect(() => {
    let url;
    if (isArabic) {
      //url = `http://modondev.uaecentral.cloudapp.azure.com:8070/ar/events-landing-page`;
      url = `https://www.marsana.ae/ar/events-landing-page`;
    } else {
      //url = `http://modondev.uaecentral.cloudapp.azure.com:8070/en/events-landing-page`;
      url = `https://www.marsana.ae/en/events-landing-page`;
    }
    fetch(url)
      .then((res) => res.json())
      .then((data) => {
        setApiData({
          title: data[0].title[0].value,
          description: data[0].body[0].value,
          homeBanner: data[0]["field_home_background_image"][0].url,
        });
      })
      .catch((error) => console.log(error));
  }, []);
  return (
    <main className="main">
      <img
        className="home-path"
        src={
          drupalSettings.marsana_events.marsana_js.moduleimagepath +
          "home-path.png"
        }
        alt="homw path"
      />
      <img className="home-mask" src={apiData.homeBanner} alt="home mask" />
      <h1 className="page-heading">{apiData.title}</h1>
      <div className="text-container">
        {/* <h3>LOREM ISUM DOLOR SIT</h3> */}
        <p>{apiData.description}</p>
      </div>
    </main>
  );
};

export default EventLanding;
