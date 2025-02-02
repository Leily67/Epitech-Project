
import styled from 'styled-components';
import { Link } from 'react-router-dom'

import React from 'react';
import logo from "./spoti.png";




const StyledImg = styled.img`
  width: 150px;
 
  
`;




function Home() {
  return (
    <div className='home'>
      <StyledImg src={logo} alt="Logo"></StyledImg>
      <div className='home2'>
      <Link to='/artist' id="select">Artists</Link>
      <Link to='/album' id="select">Albums</Link>
      <Link to='/genre' id="select">Genres</Link>
      <Link to='/tracks' id="select">Tracks</Link>
      </div>
      <div className='img'>
      </div>
      </div>


  )

}



export default Home;



