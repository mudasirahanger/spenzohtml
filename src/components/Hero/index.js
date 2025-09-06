import styles from "./Hero.module.css";

export default function Hero() {
  return (
    <section className={`hero-section ${styles.heroSection}`}>
      <div className="container">
        <h1>Find the right doctor for you</h1>
        <p className="lead mb-4">
          Book appointments with experienced doctors across all specialties
        </p>
        <form className="row g-2 justify-content-center mt-1" id="searchForm">
          <div className="col-12 col-md-5">
            <input
              type="text"
              className="form-control"
              placeholder="Search by doctor, specialty, or symptom"
              name="q"
              required
            />
          </div>
          <div className="col-auto">
            <button type="submit" className="btn btn-success">
              Search
            </button>
          </div>
        </form>
      </div>
    </section>
  );
}