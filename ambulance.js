// Fetch ambulance list and display
fetch("ambulance.json")
  .then((response) => response.json())
  .then((data) => {
    console.log("Ambulance Data Loaded:", data);
    displayAmbulances(data);
  })
  .catch((error) => console.error("Error loading ambulance data:", error));

function displayAmbulances(list) {
  const container = document.getElementById("ambulance-list");
  container.innerHTML = "";

  list.forEach((item) => {
    const div = document.createElement("div");
    div.className = "ambulance-card";
    div.innerHTML = `
      <h3>Driver: ${item.driver_name}</h3>
      <p>Phone: ${item.phone}</p>
      <p>Location: ${item.location}</p>
      <p>Status: <strong>${item.status}</strong></p>
      <hr>
    `;
    container.appendChild(div);
  });
}
