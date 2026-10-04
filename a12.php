<!DOCTYPE html>
<html>

<head>

<title>Movie API</title>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<style>

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid black;
    padding: 8px;
}

img {
    width: 80px;
}

</style>

</head>

<body>

<h2>Movie Information</h2>

<table>

<thead>
<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Poster</th>
    <th>Year</th>
    <th>Genre</th>
    <th>Rating</th>
    <th>Director</th>
    <th>Country</th>
    <th>Language</th>
    <th>Actors</th>
</tr>
</thead>

<tbody id="movieData"></tbody>

</table>

<script>

$.ajax({

    url: "https://freetestapi.com/api/v1/movies",
    type: "GET",

    success: function(movies) {

        let output = "";

        movies.forEach(function(movie) {

            output += `
            <tr>
                <td>${movie.id ?? ""}</td>
                <td>${movie.title ?? ""}</td>
                <td>
                    <img src="${movie.poster ?? ""}">
                </td>
                <td>${movie.year ?? ""}</td>
                <td>${movie.genre ?? ""}</td>
                <td>${movie.rating ?? ""}</td>
                <td>${movie.director ?? ""}</td>
                <td>${movie.country ?? ""}</td>
                <td>${movie.language ?? ""}</td>
                <td>${movie.actors ?? ""}</td>
            </tr>
            `;

        });

        $("#movieData").html(output);

    },

    error: function() {

        $("#movieData").html(
            "<tr><td colspan='10'>Unable to load movies.</td></tr>"
        );

    }

});

</script>

</body>
</html>