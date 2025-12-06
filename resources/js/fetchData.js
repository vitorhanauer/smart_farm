export async function updateSensors(ESP32_IP) {
  try {
    const res = await fetch(`${ESP32_IP}/sensors`);
    const data = await res.json();
    return data;
  } catch (error) {
  }
}