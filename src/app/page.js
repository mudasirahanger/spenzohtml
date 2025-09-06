import styles from "./page.module.css";

import Navbar from "@/components/Navbar";
import Hero from "@/components/Hero";
import Popular from "@/components/Popular/Popular";

export default function Home() {
  return (
    <div>
      <Navbar />
      <Hero />
      <Popular />
    </div>
  );
}
