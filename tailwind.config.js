module.exports = {
  // mode: "jit", // Kích hoạt chế độ JIT
  // purge: ["*.php"],
  content: ["./**/*.php"],
  theme: {
    screens: {
      sm: "640px",
      md: "768px",
      lg: "1024px",
      xl: "1280px",
      "2xl": "1536px",
    },
    extend: {
      colors: {
        transparent: "transparent",
        black: "#000",
        white: "#fff",
        primary: "#66cc66",
      },
    },
    container: {
      center: true,
      padding: {
        DEFAULT: "1rem",
        sm: "2rem",
        lg: "4rem",
        xl: "5rem",
        "2xl": "6rem",
      },
    },
  },
};
