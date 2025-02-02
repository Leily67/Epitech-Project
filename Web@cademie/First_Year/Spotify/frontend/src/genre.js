import styled from 'styled-components';
import './Home.css';
import './artist.js';
import './album.js';
import './genre.js';
import './genre_album.js';
import './tracks.js';

import React from 'react';
import logo from "./spoti.png";




const StyledImg = styled.img`
  width: 150px;
 
  
`;

function Genres(){



    return (
        <div className='home'>
      <StyledImg src={logo} alt="Logo"></StyledImg>
      <div className='home2'>
      <a href='./artist.js/'>Artists</a>
        <a href='./album.js/'>Albums</a>
        <a href='./genre.js/'>Genres</a>
        <a href='./tracks.js/'>Tracks</a>
        <a href='./genre_album.js/'>Albums Genres</a>
      </div>
      <div className='img'>
      </div>
      </div>
    );
}

export default Genres;