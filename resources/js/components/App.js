import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import { BrowserRouter, Route, Routes, Switch } from 'react-router-dom'
import Header from './Header'
import NewProject from './NewProject'
import ProjectsList from './ProjectsList'

class App extends Component {
  render () {
    return (
      <BrowserRouter>
        <div>
          <Header />
          {/* v5 below: react-router-dom previously used switch and component */}
          {/* <Switch>
            <Route exact path='/' component={ProjectsList} />
          </Switch> */}
          <Routes>
            <Route exact path='/' element={<ProjectsList />} />
            <Route exact path='/create' element={<NewProject />} />
          </Routes>
        </div>
      </BrowserRouter>
    )
  }
}

ReactDOM.render(<App />, document.getElementById('app'))
