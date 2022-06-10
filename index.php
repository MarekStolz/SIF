<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BMI kalkulačka</title>
    <style>
      * {
        margin: 0;
        padding: 0;
      }
      body {
        font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
        font-size: 20px;
        font-weight: 100;
        color: #acc;
        background: #355;
      }
      b {
        font-weight: 600;
      }
      main {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      main > div {
        width: 15em;
        margin: 1em;
        padding: 2em;
        border-radius: 1em;
        background: #344;
        display: flex;
        flex-direction: column;
        gap: 1em;
      }
      main > div > p:nth-of-type(2) {
        font-size: 2em;
        font-weight: 600;
      }
      input {
        color: #acc;
        background: #222;
        font-size: 1.2em;
        font-weight: 600;
        padding: 0.5em;
        border: none;
        border-radius: 0.5em;
      }
    </style>
  </head>
  <body>
    <main>
      <div v-scope>
        <label>
          Hmotnost: <input v-model="weight" type="number" min="50" max="250" step="1" /> kg
        </label>
        <label>
          Výška: <input v-model="height" type="number" min="100" max="250" step="1" /> cm
        </label>
        <p>
          bmi = <b>m</b>[kg] / <b>h<sup>2</sup></b
          >[m] = <b>{{ weight_kg }}</b> / <b>{{ height_m }}<sup>2</sup></b>
        </p>
        <p>{{ bmi }}</p>
      </div>
    </main>
    <script type="module">
      import { createApp } from "https://unpkg.com/petite-vue?module";
      createApp({
        height: 180,
        weight: 80,
        get height_m() {
          return isNaN(this.height) ? 180 : this.height / 100;
        },
        get weight_kg() {
          return isNaN(this.weight) ? 80 : this.weight;
        },
        get bmi() {
          return Math.round(100 * (this.weight_kg / Math.pow(this.height_m, 2))) / 100;
        },
      }).mount();
    </script>
  </body>
</html>