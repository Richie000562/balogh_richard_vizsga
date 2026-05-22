const API = "http://127.0.0.1:8000/api";

async function loadPage(id, ujAdat) {

    const restponse = await fetch(`${API}/kategoriak`, {

        method: "PUT",
        headers: {
            "Content-Type": "application/json"

        },
        body: JSON.stringify(ujAdat)
    })
    if(!restponse.ok){
        throw new Error("Hiba a modositas soran")
    }

    const data = await Response.json();

    console.log(data)

}

async function esemenyTorlese() {
    const response = await fetch (`${API}/esemenyek/${id}`,{

        method: "DELETE"

    })

    if (!response.ok) {
        throw new Error("Hiba a torles soran");
        
        
    }
    console.log("sikeres torles")
    
}



