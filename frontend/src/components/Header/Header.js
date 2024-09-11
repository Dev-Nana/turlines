import React from 'react';

import logo from '../../assets/images/logo.png'
import fone from '../../assets/images/fone.png';
import cadastro from '../../assets/images/cadastro.png';
import ajuda from '../../assets/images/ajuda.png';

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
        <Navbar.Brand className='logo' href='#home'><img src={logo} alt="Logo" className='logo' /></Navbar.Brand>
        <Navbar.Toggle className='toggler' aria-controls='basic-navbar-nav' />
        <Navbar.Collapse className='collapse' id='basic-navbar-nav'>
          <Nav className='nav me-auto'>
            <Nav.Link href='#' className='link'>
              <img src={fone} alt="fone.png" className='png' />
              Central de Vendas
            </Nav.Link>
            <Nav.Link href='#' className='link'>
              <img src={cadastro} alt="cadastro.png" className='png' />
              Iniciar Sessão
            </Nav.Link>
            <Nav.Link href='#' className='link'>
              <img src={cadastro} alt="cadastro.png" className='png' />
              Entrar
            </Nav.Link>
            <Nav.Link href='#' className='link'>
              <img src={ajuda} alt="ajuda.png" className='png' />
              Ajuda
            </Nav.Link>
          </Nav>
          <Nav className='nav-hidden menu'>
            <Navbar.Toggle className='toggler' aria-controls='basic-navbar-nav' />
            <Nav.Link href='#' className='link'>
              Pacotes
            </Nav.Link>
            <Nav.Link href='#' className='link'>
              Hospedagens
            </Nav.Link>
            <Nav.Link href='#' className='link'>
              Transportes
            </Nav.Link>
            <Nav.Link href='#' className='link'>
              Guias
            </Nav.Link>
            <Nav.Link href='#' className='link'>
              Excursões
            </Nav.Link>
          </Nav>
        </Navbar.Collapse>
      </Container>
    </Navbar>
  )
}

export default Header;
