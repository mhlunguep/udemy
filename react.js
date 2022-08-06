import React from 'react';
import ReactDOM from 'react-dom/client';

function Page() {
  return React.createElement('div', null, [
    React.createElement('h4', null, 'Hello World!'),
    React.createElement('hr', null),
    React.createElement('h2', null, 'I am Phumlani Mhlungu'),
    React.createElement('p', null, 'A Full Stack Developer'),
    React.createElement('p', null, `ⓒ Copyright ${Date().toLocaleString()}`),
  ]);
}
const rootEl = document.querySelector('#root');
const root = ReactDOM.createRoot(rootEl);

setInterval(function () {
  root.render(Page());
}, 1000);
