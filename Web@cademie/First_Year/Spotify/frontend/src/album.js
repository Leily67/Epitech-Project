import { useEffect, useState } from 'react'
import jQuery from 'jquery';
import { useParams } from 'react-router-dom'
import './Home.css';

function Albums() {
    const [albums, setAlbums] = useState([]);
    const { albumId } = useParams();

    useEffect(() => {
        console.log(albumId);
        if (albumId !== undefined) {
            jQuery.ajax({
                url: 'http://127.0.0.1:8080/albums.php?albumId='+albumId,
                method: 'GET',
            }).then(response => {
                setAlbums(response);
            }).catch(error => {
                console.log(error);
            })
        }
    }, [albumId])

    return ( <div className = "Albums" > 
    {
            albums.map(album => (
                <div key = { album.track_name } >
                    <p> { album.track_name } </p> 
                    <img src = { album.album_cover }
                alt = { album.album_name }/> </div >
            ))
    
    }
    </div>);
    }

    export default Albums