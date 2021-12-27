import React from "react";
import ReactDOM from "react-dom";

export default function LandingPage(){
    return (
        <div>
            <h1>Hello Ehardwares.co.tz</h1>
        </div>
    );
}

if(document.getElementById('landingPage')){
    ReactDOM.render(<LandingPage />, document.getElementById('landingPage'));
}
