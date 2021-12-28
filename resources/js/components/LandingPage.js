import React from "react";
import ReactDOM from "react-dom";

export default function LandingPage(){
    return (
        <div>
            <p>Hello Ehardwares.co.tz</p>
        </div>
    );
}

if(document.getElementById('landingPage')){
    ReactDOM.render(<LandingPage />, document.getElementById('landingPage'));
}
