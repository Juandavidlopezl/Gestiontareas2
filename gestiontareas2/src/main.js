import React from 'react';
import ReactDOM from 'react-dom';

const App = () => {
  return (
    <div>
      <img src="logo.png" className="logo" alt="Mi logo" />
      <ul className="menu">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Acerca de</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
      { /* Contenido principal de la página */ }
    </div>
  );
};

ReactDOM.render(<App />, document.getElementById('root'));
