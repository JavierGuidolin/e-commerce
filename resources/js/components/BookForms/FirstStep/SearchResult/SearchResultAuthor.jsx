import React from 'react'

const SearchResultAuthor = ({ data, selectSearchAuthor }) => {

    return (
        <div onClick={() => { selectSearchAuthor(data); }}>
            <p key={data.id} className="border mb-0 bg-dark rounded pl-2" >
                <a href="#" className="text-light">
                    {data.name + " " + data.surname}
                </a>
            </p>
        </div>
    )
}

export default SearchResultAuthor
