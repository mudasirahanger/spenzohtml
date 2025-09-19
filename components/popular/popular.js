import Image from "next/image";

export default function Popular() {
  return (
    <section className="py-5" id="specialties">
      <div className="container">
        <h2 className="mb-4 text-center">Popular Specialties in Srinagar</h2>
        <div className="row g-4">
          <div className="col-6 col-md-4 col-lg-3">
            <div className="specialty-card h-100">
              <Image
                className="card-Image-top fit"
                src="/gynea.jpg"
                alt="Gynecologist"
                width={304}
                height={160}
              />
              <div className="p-3 text-center fw-semibold">Gynecologist</div>
            </div>
          </div>
          <div className="col-6 col-md-4 col-lg-3">
            <div className="specialty-card h-100">
              <Image
                className="card-Image-top fit"
                src="/derma.png"
                alt="Dermatologist"
                width={304}
                height={160}
              />
              <div className="p-3 text-center fw-semibold">Dermatologist</div>
            </div>
          </div>
          <div className="col-6 col-md-4 col-lg-3">
            <div className="specialty-card h-100">
              <Image
                className="card-Image-top fit"
                src="/pediatric.jpg"
                alt="Pediatrician"
                width={304}
                height={160}
              />
              <div className="p-3 text-center fw-semibold">Pediatrician</div>
            </div>
          </div>
          <div className="col-6 col-md-4 col-lg-3">
            <div className="specialty-card h-100">
              <Image
                className="card-Image-top fit"
                src="/physician.png"
                alt="General Physician"
                width={304}
                height={160}
              />
              <div className="p-3 text-center fw-semibold">
                General Physician
              </div>
            </div>
          </div>
          <div className="col-6 col-md-4 col-lg-3">
            <div className="specialty-card h-100">
              <Image
                className="card-Image-top fit"
                src="/physician.png"
                alt="Orthopedist"
                width={304}
                height={160}
              />
              <div className="p-3 text-center fw-semibold">Orthopedist</div>
            </div>
          </div>
          <div className="col-6 col-md-4 col-lg-3">
            <div className="specialty-card h-100">
              <Image
                className="card-Image-top fit"
                src="/physician.png"
                alt="Ophthalmologist"
                width={304}
                height={160}
              />
              <div className="p-3 text-center fw-semibold">Ophthalmologist</div>
            </div>
          </div>
          <div className="col-6 col-md-4 col-lg-3">
            <div className="specialty-card h-100">
              <Image
                className="card-Image-top fit"
                src="/physician.png"
                alt="ENT Specialist"
                width={304}
                height={160}
              />
              <div className="p-3 text-center fw-semibold">ENT Specialist</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
