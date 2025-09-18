import Link from "next/link";



export default function Header() {
  return (
    <nav className="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
    <div className="container">
        <a className="navbar-brand fw-bold" href="#">Jeelaan</a>
        <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span className="navbar-toggler-icon"></span>
        </button>
        <div className="collapse navbar-collapse" id="navbarNav">
        <ul className="navbar-nav me-auto">
            <li className="nav-item"><Link className="nav-link" href="#doctors">Find Doctors</Link></li>
            <li className="nav-item"><Link className="nav-link" href="#labtests">Lab Tests</Link></li>
        </ul>
        <form className="d-flex me-3" role="search">
            <input className="form-control me-2" type="search" placeholder="Search doctors, clinics, tests..." aria-label="Search" />
            <button className="btn btn-outline-primary" type="submit">Search</button>
        </form>
        <a href="#" className="btn btn-primary">Login / Sign Up</a>
        </div>
    </div>
    </nav>
  );
}
