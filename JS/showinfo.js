let got = localStorage.getItem("tvname");
console.log(got);
let url = `https://api.themoviedb.org/3/search/movie?api_key=f251c7bdac148d6e15351fa8fa6d66be&language=en-US&query=${got}&page=1&include_adult=false`;
function getmovies(url) {
  fetch(url)
    .then((res) => res.json())
    .then((data) => {
      showmovies(data);
    });
}
getmovies(url);
function showmovies(data) {
  console.log(data.results[0]);
  console.log(data.results[0].name);

  document.getElementById("showtitle").innerHTML = data.results[0].title;
  document.getElementById("title").innerHTML = data.results[0].title;
  document.getElementById("date").innerHTML = data.results[0].release_date;
  document.getElementById("language").innerHTML =
    data.results[0].original_language;
  document.getElementById("adult").innerHTML = data.results[0].adult;
  document.getElementById("rating").innerHTML = data.results[0].popularity;
  document.getElementById("overview").innerHTML = data.results[0].overview;
  document.getElementById("poster").src = "https://image.tmdb.org/t/p/w500"+data.results[0].poster_path;

}
