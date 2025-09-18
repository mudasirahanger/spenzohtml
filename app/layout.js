import "./globals.css";
import 'bootstrap/dist/css/bootstrap.css';

export const metadata = {
  title: "Jeelan App",
  description: "Jeelan App",
  viewpoint: "width=device-width, initial-scale=1",
};

export default function RootLayout({ children }) {
  return (
    <html lang="en">
      <body >
        {children}
      </body>
    </html>
  );
}
