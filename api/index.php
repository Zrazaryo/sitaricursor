<?php
/**
 * Entry point untuk deployment di Vercel.
 *
 * File ini akan dipanggil oleh Vercel (melalui routes di vercel.json)
 * lalu me-load halaman landing asli aplikasi Anda.
 *
 * Struktur lama untuk hosting biasa (Apache/cPanel) tetap memakai index.php di root,
 * sedangkan di Vercel, "file utama"-nya adalah api/index.php ini.
 */

// Pastikan path relatif dari folder api ke root benar
require __DIR__ . '/../landing.php';
