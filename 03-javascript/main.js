// node pilih-juz-dengan-deskripsi.js

const frames = ["⠋","⠙","⠹","⠸","⠼","⠴","⠦","⠧","⠇","⠏"];

// === Data deskripsi Juz (Mushaf Madani 604 hlm) ===
const juzInfo = [
  { juz: 1,  pages: [1,20],  surahs: ["Al-Fatihah", "Al-Baqarah (awal s.d. 2:141)"] },
  { juz: 2,  pages: [21,41], surahs: ["Al-Baqarah (lanjutan 2:142–252)"] },
  { juz: 3,  pages: [42,61], surahs: ["Al-Baqarah (2:253–286)", "Ali 'Imran (1–92)"] },
  { juz: 4,  pages: [62,81], surahs: ["Ali 'Imran (93–200)", "An-Nisa (1–23)"] },
  { juz: 5,  pages: [82,101],surahs: ["An-Nisa (24–147)"] },
  { juz: 6,  pages: [102,121],surahs: ["An-Nisa (148–176)", "Al-Ma'idah (1–81)"] },
  { juz: 7,  pages: [122,141],surahs: ["Al-Ma'idah (82–120)", "Al-An'am (1–110)"] },
  { juz: 8,  pages: [142,161],surahs: ["Al-An'am (111–165)", "Al-A'raf (1–87)"] },
  { juz: 9,  pages: [162,181],surahs: ["Al-A'raf (88–206)"] },
  { juz:10,  pages: [182,201],surahs: ["Al-Anfal (1–40)", "At-Tawbah (1–92)"] },
  { juz:11,  pages: [202,221],surahs: ["At-Tawbah (93–129)", "Yunus (lengkap)", "Hud (1–5)"] },
  { juz:12,  pages: [222,241],surahs: ["Hud (6–123)", "Yusuf (1–52)"] },
  { juz:13,  pages: [242,261],surahs: ["Yusuf (53–111)", "Ar-Ra'd (lengkap)", "Ibrahim (lengkap)", "Al-Hijr (lengkap)"] },
  { juz:14,  pages: [262,281],surahs: ["An-Nahl (lengkap)"] },
  { juz:15,  pages: [282,301],surahs: ["Al-Isra (lengkap)", "Al-Kahf (1–74)"] },
  { juz:16,  pages: [302,321],surahs: ["Al-Kahf (75–110)", "Maryam (lengkap)", "Ta-Ha (lengkap)"] },
  { juz:17,  pages: [322,341],surahs: ["Al-Anbiya (lengkap)", "Al-Hajj (lengkap)"] },
  { juz:18,  pages: [342,361],surahs: ["Al-Mu'minun (lengkap)", "An-Nur (lengkap)", "Al-Furqan (1–20)"] },
  { juz:19,  pages: [362,381],surahs: ["Al-Furqan (21–77)", "Ash-Shu'ara (lengkap)", "An-Naml (1–55)"] },
  { juz:20,  pages: [382,401],surahs: ["An-Naml (56–93)", "Al-Qasas (lengkap)", "Al-'Ankabut (1–45)"] },
  { juz:21,  pages: [402,421],surahs: ["Al-'Ankabut (46–69)", "Ar-Rum (lengkap)", "Luqman (lengkap)", "As-Sajdah (lengkap)", "Al-Ahzab (1–30)"] },
  { juz:22,  pages: [422,441],surahs: ["Al-Ahzab (31–73)", "Saba (lengkap)", "Fatir (lengkap)", "Ya-Sin (lengkap)"] },
  { juz:23,  pages: [442,461],surahs: ["As-Saffat (lengkap)", "Sad (lengkap)", "Az-Zumar (1–31)"] },
  { juz:24,  pages: [462,481],surahs: ["Az-Zumar (32–75)", "Ghafir (lengkap)", "Fussilat (1–46)"] },
  { juz:25,  pages: [482,501],surahs: ["Fussilat (47–54)", "Ash-Shura (lengkap)", "Az-Zukhruf (lengkap)", "Ad-Dukhan (lengkap)", "Al-Jathiyah (lengkap)"] },
  { juz:26,  pages: [502,521],surahs: ["Al-Ahqaf (lengkap)", "Muhammad (lengkap)", "Al-Fath (lengkap)", "Al-Hujurat (lengkap)", "Qaf (lengkap)", "Adh-Dhariyat (1–30)"] },
  { juz:27,  pages: [522,541],surahs: ["Adh-Dhariyat (31–60)", "At-Tur", "An-Najm", "Al-Qamar", "Ar-Rahman", "Al-Waqi'ah", "Al-Hadid"] },
  { juz:28,  pages: [542,561],surahs: ["Al-Mujadilah", "Al-Hashr", "Al-Mumtahanah", "As-Saff", "Al-Jumu'ah", "Al-Munafiqun", "At-Taghabun", "At-Talaq", "At-Tahrim"] },
  { juz:29,  pages: [562,581],surahs: ["Al-Mulk", "Al-Qalam", "Al-Haqqah", "Al-Ma'arij", "Nuh", "Al-Jinn", "Al-Muzzammil", "Al-Muddathir", "Al-Qiyamah", "Al-Insan", "Al-Mursalat"] },
  { juz:30,  pages: [582,604],surahs: ["An-Naba", "An-Nazi'at", "'Abasa", "At-Takwir", "Al-Infitar", "Al-Mutaffifin", "Al-Insyiqaq", "Al-Buruj", "At-Tariq", "Al-A'la", "Al-Gasyiyah", "Al-Fajr", "Al-Balad", "Asy-Syams", "Al-Lail", "Ad-Duha", "Asy-Syarh", "At-Tin", "Al-'Alaq", "Al-Qadr", "Al-Bayyinah", "Az-Zalzalah", "Al-'Adiyat", "Al-Qari'ah", "At-Takathur", "Al-'Asr", "Al-Humazah", "Al-Fil", "Quraisy", "Al-Ma'un", "Al-Kautsar", "Al-Kafirun", "An-Nasr", "Al-Lahab", "Al-Ikhlas", "Al-Falaq", "An-Nas"] },
];

// === Pilih Juz acak ===
const angka = Math.floor(Math.random() * 30) + 1;

// === Loading UI ===
const duration = 3500;   // ms
const barLength = 24;
const tick = 80;

let start = Date.now();
let i = 0;
process.stdout.write("\x1B[?25l"); // sembunyikan kursor

const timer = setInterval(() => {
  const elapsed = Date.now() - start;
  const percent = Math.min(100, Math.round((elapsed / duration) * 100));
  const filledLen = Math.round((percent / 100) * barLength);
  const filled = "█".repeat(filledLen);
  const empty = "─".repeat(barLength - filledLen);
  const spinner = frames[i = ++i % frames.length];
  process.stdout.write(`\r${spinner} Sedang memilih juz [${filled}${empty}] ${percent}%`);
  if (elapsed >= duration) {
    clearInterval(timer);
    process.stdout.write(`\r✓ Selesai memilih juz  [${"█".repeat(barLength)}] 100%\n`);
    tampilkanHasil(angka);
    process.stdout.write("\x1B[?25h"); // tampilkan lagi kursor
  }
}, tick);

// === Fungsi tampilkan hasil ===
function tampilkanHasil(noJuz) {
  const info = juzInfo.find(j => j.juz === noJuz);
  if (!info) {
    console.log(`Juz ke-${noJuz} belum ada di data.`);
    return;
  }
  const [pStart, pEnd] = info.pages;
  console.log(`\nJuz untuk anda baca adalah **Juz ke-${noJuz}**`);
  console.log(`Halaman Mushaf Madani: ${pStart}–${pEnd}`);
  console.log(`Surat yang termasuk:`);
  info.surahs.forEach((s, idx) => console.log(`  ${idx + 1}. ${s}`));
}
