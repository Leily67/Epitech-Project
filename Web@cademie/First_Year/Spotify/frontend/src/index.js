import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import reportWebVitals from './reportWebVitals';
import Albums from "./album"
import Artists from "./artist"
import Genres from "./genre"
import GenresAlbums from "./genre_album"
import Tracks from "./tracks"

import {
  Routes, Route, BrowserRouter
}from "react-router-dom";
import Home from './Home';

ReactDOM.render(
  <React.StrictMode>
    <BrowserRouter>
    <Routes>
      <Route path="/" element={<Home />} />
      <Route path="/album/:albumId" element={<Albums />} />
      <Route path="/genre" element={<Genres />} />
      <Route path="/genre_album" element={<GenresAlbums />} />
      <Route path="/tracks" element={<Tracks />} />
      <Route path="/artist/:id" element={<Artists/>} />
      </Routes>
      </BrowserRouter>
  </React.StrictMode>,
  document.getElementById('root')
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
