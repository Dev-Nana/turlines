import React from 'react';

import Container from 'react-bootstrap/Container';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';
import Button from 'react-bootstrap/Button';
import 'bootstrap/dist/css/bootstrap.min.css';

import './Banner.scss';
import '../../App.scss';

function Banner() {
  return (
    <Container expand='lg' className='banner__content'>
      <Container className='container'>
        <Navbar.Brand className='logo' href='#home'><img src={logo} alt="Logo" className='logo' /></Navbar.Brand>
        
      </Container>
    </Container>
  )
}

export default Banner;
