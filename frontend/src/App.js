import React from 'react';
import './App.scss';
import Header from './components/Header/Header';
import HeaderMenu from './components/HeaderMenu/HeaderMenu';
import Banner from './components/Banner/Banner';
import SearchBox from './components/SearchBox/SearchBox';

function App() {
  return (
    <div className="App">
      <Header/>
      <HeaderMenu/>
      <Banner/>
    </div>
  );
}

export default App;
