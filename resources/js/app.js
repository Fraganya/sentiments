import React from 'react';
import ReactDOM from 'react-dom';

import AuthWidget from "./components/auth";


class AppComponent extends React.Component {

    render() {
        return (
            <div>
                <AuthWidget/>
            </div>
        )
    }
}


ReactDOM.render(<AppComponent/>, document.querySelector('#app'));
