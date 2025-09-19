
import Image from 'next/image';
import Link from 'next/link';


export default function BottomTop() {
  return (
    <section className="py-5 bg-light" id="online">
      <div className="container">
        <div className="row align-items-center g-4">
          <div className="col-md-6">
            <Image src="/booking.jpg" className="img-fluid rounded" alt="Doctor Online"  width={636} height={357} />
          </div>
          <div className="col-md-6">
            <h3>Doctor Online</h3>
            <p>Get doctor checkups online from the comfort of your home.</p>
            <a href="#bookModal" className="btn btn-success" data-bs-toggle="modal">Book Now</a>
          </div>
        </div>
        <hr className="my-5" />
        <div className="row align-items-center g-4" id="labtests">
          <div className="col-md-6 order-md-2">
            <Image src="/booking.jpg" className="img-fluid rounded" alt="Lab Tests at Home" width={636} height={357} />
          </div>
          <div className="col-md-6 order-md-1">
            <h3>Book Lab Tests Online</h3>
            <p>Get your lab tests done at home with reliable results.</p>
            <Link href="#bookModal" className="btn btn-success" data-bs-toggle="modal">Book Now</Link>
          </div>
        </div>
      </div>
    </section>
  );
}