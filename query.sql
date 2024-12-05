SELECT a.album_title, ar.artist_name
FROM albums a
JOIN artist ar ON a.artist_id = ar.artist_id
WHERE ar.country = 'UK'
AND a.release_year BETWEEN 1970 AND 1977;