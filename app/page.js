import Footer from "@/components/footer/footer";
import Header from "@/components/header/header";
import HeroSection from "@/components/hero/hero";
import Popular from "@/components/popular/popular";
import VideoConsult from "@/components/videoconsult/videoconsult";
import Nearyou from "@/components/nearyou/nearyou";
import BottomTop from "@/components/bottomtop/bottomtop";


export default function Home() {
  return (
   <>
   <Header />
   <HeroSection />
   <Popular />
   <VideoConsult />
   <Nearyou />
   <BottomTop />
   <Footer />
   </>
  );
}
