import React from 'react';
import { Link, useRouteMatch } from 'react-router-dom';

const OldSchoolMenuLink = ({ label, to, activeOnlyWhenExact }) => {

    let match = useRouteMatch({
        path: to,
        exact: activeOnlyWhenExact
    });

    return (

        <Link
            className={match ? "text-center nav-link active" : "text-center nav-link"}
            to={to}>
            {label}
        </Link>

    );
}

export default OldSchoolMenuLink;
