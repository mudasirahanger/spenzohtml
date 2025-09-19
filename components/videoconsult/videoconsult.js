import Image from "next/image";

export default function VideoConsult() {
  return (
    <section className="py-5 bg-light" id="consult">
      <div className="container">
        <h2 className="mb-4 text-center">Video Consult with Top Doctors</h2>
        <div className="row g-4">
          <div className="col-md-4">
            <div className="doctor-card">
              <Image
                src="/doctor1.png"
                alt="Dr. Sheema Jan"
                className="avatar mb-2"
                width={160}
                height={160}
              />
              <h6 className="mb-1">Dr. Sheema Jan</h6>
              <small className="text-muted d-block mb-2">Gynecologist</small>
              <a
                href="#bookModal"
                className="btn btn-outline-primary btn-sm"
                data-bs-toggle="modal"
              >
                Consult Now
              </a>
            </div>
          </div>
          <div className="col-md-4">
            <div className="doctor-card">
              <Image
                src="/doctor2.png"
                alt="Dr. Riyaz Nikoo"
                className="avatar mb-2"
                width={160}
                height={160}
              />
              <h6 className="mb-1">Dr. Riyaz Nikoo</h6>
              <small className="text-muted d-block mb-2">Dermatologist</small>
              <a
                href="#bookModal"
                className="btn btn-outline-primary btn-sm"
                data-bs-toggle="modal"
              >
                Consult Now
              </a>
            </div>
          </div>
          <div className="col-md-4">
            <div className="doctor-card">
              <Image
                src="/doctor1.png"
                alt="Dr. Sheema Jan"
                className="avatar mb-2"
                width={160}
                height={160}
              />
              <h6 className="mb-1">Dr. Waseem Ahmad</h6>
              <small className="text-muted d-block mb-2">Dentist</small>
              <a
                href="#bookModal"
                className="btn btn-outline-primary btn-sm"
                data-bs-toggle="modal"
              >
                Consult Now
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
