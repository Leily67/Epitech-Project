import { useEffect, useState } from 'react'
import jQuery from 'jquery';
import { useParams } from 'react-router-dom'
import './Home.css';

function Artists() {
    const [artists, setArtists] = useState([]);
    const { artistId } = useParams();

    useEffect(() => {
        console.log(artistId);
        if (artistId !== undefined) {
            jQuery.ajax({
                url: 'http://127.0.0.1:8080/artists.php?artistId='+artistId,
                method: 'GET',
            }).then(response => {
                setArtists(response);
            }).catch(error => {
                console.log(error);
            })
        }
    }, [artistId])

    return ( <div className = "Artists" > 
    {
            artists.map(artist => (
                <div key = { artist.track_name } >
                    <p> { artist.track_name } </p> 
                    <img src = { artist.artist_cover }
                alt = { artist.artist_name }/> </div >
            ))
    
    }
    </div>);
    }

    export default Artists