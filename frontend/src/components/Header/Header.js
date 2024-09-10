import React from 'react';

import logo from '../../assets/images/logo.png'
import fone from '../../assets/images/fone.png';

import Container from 'react-bootstrap/Container';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';
import Button from 'react-bootstrap/Button';
import 'bootstrap/dist/css/bootstrap.min.css';

import './Header.scss';
import '../../App.scss';

function Header() {
  return (
    <Navbar expand='lg' className='navbar__content'>
      <Container className='container'>
        <Navbar.Brand className='logo' href='#home'><img src={logo} alt="Logo" className='logo'/></Navbar.Brand>
        <Navbar.Toggle className='toggler' aria-controls='basic-navbar-nav' />
        <Navbar.Collapse className='collapse' id='basic-navbar-nav'>
          <Nav className='nav me-auto'>
            <Nav.Link href='#home' className='link'><img src={logo} alt="Logo" className='logo'/>Central de Vendas</Nav.Link>
            <Nav.Link href='#link' className='link'>Iniciar Sessão</Nav.Link>
            <Nav.Link href='#link' className='link'>Entrar</Nav.Link>
            <Nav.Link href='#link' className='link'>Ajuda</Nav.Link>
          </Nav>
        </Navbar.Collapse>
      </Container>
    </Navbar>
  )
}

export default Header;
