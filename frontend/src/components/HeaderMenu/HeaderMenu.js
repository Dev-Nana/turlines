import React from 'react';

import Container from 'react-bootstrap/Container';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';
import 'bootstrap/dist/css/bootstrap.min.css';

import './HeaderMenu.scss';
import '../../App.scss';

function HeaderMenu() {
  return (
    <Navbar expand='lg' className='menu__content'>
      <Container className='container'>
        <Navbar.Collapse className='collapse menu'>
          <Nav className='nav-exposed me-auto'>
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

export default HeaderMenu;
