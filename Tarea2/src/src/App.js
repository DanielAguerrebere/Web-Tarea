import React from 'react';
import logo from './logo.svg';
import './App.css';
import Hello from './Hello';

function App() {
  return (
    <div className="App">
      <Hello />

      <ul>
        {
          ["Daniel", "Juan"].map(function (arrayItem) {
            return (<li>{arrayItem.toUpperCase()}</li>)
          })
        }
      </ul>

    </div>
  );
}

export default App;
