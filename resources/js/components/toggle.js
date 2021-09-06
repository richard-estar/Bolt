import PreviousMap from 'postcss/lib/previous-map';
import React from 'react';
import ReactDOM from 'react-dom';


function handleChange() {
    if (e.target.checked) {
        var state = "on";
    } else {
        var state = "off";
    }
}

function ToggleVisibilty(props) {

    return (
        <div className="container">
            <div>This is turned {props.state}</div>
            <label htmlfor="state" >Toggle to test </label>
            <input type="checkbox" id="state" name="state" onChange={handleChange} />
        </div>
    );
}


export default ToggleVisibilty;

if (document.getElementById('toggle')) {
    ReactDOM.render(<ToggleVisibilty />, document.getElementById('toggle'));
}
