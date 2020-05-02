import React from 'react';
import './Preloader.css'

const Preloader = ({styling}) => {
    return (
        <div className={`text-center ${styling}`}>
            <div className="loadingio-spinner-dual-ball-b1s6nklj249">
                <div className="ldio-04mao31xz2fw">
                    <div></div><div></div><div></div>
                </div>
            </div>
        </div>
    )
}

export default Preloader;


