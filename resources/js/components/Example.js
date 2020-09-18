import React from 'react';
import ReactDOM from 'react-dom';

function Example() {
    return (
        <div className="jumbotron text-center">
            <h1>Welcome To Laravel!</h1>
            <p>This is the laravel application from the "Laravel From Scratch" YouTube series</p>
            <p><a className="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a className="btn btn-primary btn-lg" href="/register" role="button">Register</a></p>
            <form action="/your-server-side-code" method="POST">
        </form>
        </div>
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
