
import Form from 'next/form'

export default function HeroSection() {
  return (
    <section className="hero-section">
        <div className="container">
            <h1>Find the right doctor for you</h1>
            <p className="lead mb-4">Book appointments with experienced doctors across all specialties</p>
            <form className="row g-2 justify-content-center mt-1" id="searchForm">
            <div className="col-12 col-md-5">
                <input  className="form-control" placeholder="Search by doctor, specialty, or symptom" name="q" required />
            </div>
            <div className="col-auto">
                <button type="submit" className="btn btn-success">Search</button>
            </div>
            </form>
        </div>
        </section>
  );
}