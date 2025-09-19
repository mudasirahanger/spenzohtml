
import Image from "next/image";

export default function nearyou() {
    return (
        <section className="py-5" id="doctors">
  <div className="container">
    <h2 className="mb-4 text-center">Top Doctors Near You</h2>
    <div className="row g-4">
      <div className="col-6 col-md-3">
        <div className="doctor-card">
          <Image src="/doctor1.png" alt="Dr. Bilquess Shah" className="avatar mb-2" width={160} height={160} />
          <h6 className="mb-1">Dr. Bilquess Shah</h6>
          <small className="text-muted">Gynecologist</small>
        </div>
      </div>
      <div className="col-6 col-md-3">
        <div className="doctor-card">
          <Image src="/doctor1.png" alt="Dr. Bilquess Shah" className="avatar mb-2" width={160} height={160} />
          <h6 className="mb-1">Dr. Bashir Nikoo</h6>
          <small className="text-muted">Dermatologist</small>
        </div>
      </div>
      <div className="col-6 col-md-3">
        <div className="doctor-card">
          <Image src="/doctor1.png" alt="Dr. Bilquess Shah" className="avatar mb-2" width={160} height={160} />
          <h6 className="mb-1">Dr. Rayees Bhat</h6>
          <small className="text-muted">Dentist</small>
        </div>
      </div>
      <div className="col-6 col-md-3">
        <div className="doctor-card">
          <Image src="/doctor2.png" alt="Dr. Nisar Shah" className="avatar mb-2" width={160} height={160} />
          <h6 className="mb-1">Dr. Nisar Shah</h6>
          <small className="text-muted">Pediatrician</small>
        </div>
      </div>
    </div>
  </div>
</section>
    );
    }