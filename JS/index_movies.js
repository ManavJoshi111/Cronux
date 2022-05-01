const key = "api_key=f251c7bdac148d6e15351fa8fa6d66be";
const base_url = "https://api.themoviedb.org/3/";
const popular = base_url + "discover/movie?sort_by=popularity.desc&" + key;
const IMG_URL = "https://image.tmdb.org/t/p/w500/";
const main = document.getElementById("list");
main.innerHTML = "";
function getseries(url) {
  fetch(url)
    .then((res) => res.json())
    .then((data) => {
      for (let i = data.results.length; i >= 8; i--) data.results.pop(i);
      showseries(data.results);
    });
}

function getPosition(string, subString, index) {
  return string.split(subString, index).join(subString).length;
}

getseries(popular);
function showseries(data) {
  data.forEach((movie) => {
    let { title, poster_path, vote_average, overview } = movie;
    let pos = getPosition(overview, ".", 2);
    overview = overview.slice(0, pos);
    const movie1 = document.createElement("div");
    movie1.classList.add("movieitem");
    movie1.innerHTML = `
                    <a href="../markup/playindex.html">
                        
                        <img src="${
                          IMG_URL + poster_path
                        }" alt="Poster" class="movieimage" onclick="passname('${title}')">
                        <p class="title">${title}</p>
                        <div class="info">
                            <p class="moviedesc">${overview}</p>
                            <span>Rating : ${vote_average}</span>
                            </div>
                    </div>
                </div>
        `;
    main.appendChild(movie1);
  });
}

function passname(title) {
  console.log(title);
  localStorage.setItem("indexname", title);
  window.open("../markup/playindex.html");
}
