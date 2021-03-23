import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';

import NavBar from './NavBar'
import About from './About'
import User from './User'
import Home from './Home'
import Helper from './Helper'

function App() {
  return (
  <Router>
      <div>
          <NavBar />
          <Switch>
              <Route path="/" exact component={Home} />
              <Route path="/helper" component={Helper} />
              <Route path="/about" component={About} />
              <Route path="/user" component={User} />
          </Switch>
      </div>
  </Router>
  )
}

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}
