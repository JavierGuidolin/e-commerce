import React from 'react';
import './Titles.css';

export const Subtitle = ({ text, icon }) => {

    return (
        <>
            <h2 className="border-bottom __subtitle mt-3 mb-3">
                <span>
                    {<i className={`${icon} pr-3`}></i>}
                    {text}
                </span>
            </h2>
        </>
    );
}

export const Title = ({ text, icon }) => {

    return (
        <>
            <h1 className="border-bottom __title mt-3 mb-3">
                <span>
                    {<i className={`${icon} pr-3`}></i>}
                    {text}
                </span>
            </h1>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, libero amet. Assumenda impedit vel dignissimos qui quos! Voluptate, sunt?</p>

        </>
    );
}


