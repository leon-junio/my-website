# Site Redesign Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Upgrade leonjr.dev single-page site with portfolio cards, certifications grid, SEO, dark mode, statistics bar, contact section redesign, and code cleanup.

**Architecture:** Single-page static HTML with Bootstrap 5. All new sections added inline to `index.html`. Dark mode via CSS custom properties with `prefers-color-scheme` + manual toggle. No build step.

**Tech Stack:** Bootstrap 5.3, jQuery 3.7, FontAwesome 5.7, Lottie Player

---

## File Structure

| File | Action | Responsibility |
|------|--------|----------------|
| `index.html` | Modify | All content, meta tags, structured data, section order |
| `css/custom.css` | Rewrite | All new section styles + dark mode variables |
| `css/control.css` | Remove | Dead/duplicated CSS (same as custom.css) |
| `css/whats.css` | Remove | WhatsApp widget CSS (widget being removed) |
| `css/styles.css` | Remove | Unused old legacy styles |
| `js/main.js` | Rewrite | Dark mode toggle + statistics animation |

---

### Task 1: Clean up HTML — meta tags, SEO, structured data

**Files:**
- Modify: `index.html:1-22`

- [ ] **Replace the `<head>` block**

Old (lines 1-22):
```html
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Leon Junio Martins Ferreira</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/control.css">
    <link rel="stylesheet" href="css/whats.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo:400,400i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <link rel="shortcut icon" href="favicon.ico">
</head>
```

New:
```html
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Leon Junio Martins Ferreira — Desenvolvedor Full Stack & Portfólio</title>
    <meta name="description" content="Portfólio de Leon Junio Martins Ferreira. Engenheiro de software full stack na NG.CASH. Bacharel em Ciência da Computação pela PUC Minas. Especialista em Java, Node.js, Spring Boot, React e arquitetura de software.">
    <meta name="keywords" content="Leon Junio Martins Ferreira, desenvolvedor full stack, engenheiro de software, Java, Node.js, Spring Boot, React, TypeScript, PUC Minas, IFMG, NG.CASH">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <!-- Open Graph -->
    <meta property="og:title" content="Leon Junio Martins Ferreira — Desenvolvedor Full Stack">
    <meta property="og:description" content="Engenheiro de software full stack na NG.CASH. Bacharel em Ciência da Computação pela PUC Minas.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://leonjr.dev">
    <meta property="og:image" content="https://leonjr.dev/img/sobre.png">

    <link rel="canonical" href="https://leonjr.dev">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo:400,400i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <link rel="shortcut icon" href="favicon.ico">
</head>
```

- [ ] **Add JSON-LD structured data** — insert before `</head>`

```html
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Leon Junio Martins Ferreira",
    "jobTitle": "Engenheiro de Software Full Stack",
    "worksFor": {
        "@type": "Organization",
        "name": "NG.CASH"
    },
    "alumniOf": [
        {
            "@type": "CollegeOrUniversity",
            "name": "Pontifícia Universidade Católica de Minas Gerais"
        },
        {
            "@type": "CollegeOrUniversity",
            "name": "IFMG Campus São João Evangelista"
        }
    ],
    "knowsAbout": ["Java", "Node.js", "Spring Boot", "React", "TypeScript", "Arquitetura de Software"],
    "url": "https://leonjr.dev",
    "sameAs": [
        "https://www.linkedin.com/in/leonjrmartins/",
        "https://github.com/leon-junio",
        "https://www.youtube.com/channel/UCjLj-ZZKSv5Fd05AzSVajiw"
    ]
}
</script>
```

- [ ] **Remove duplicate FontAwesome link at end of body** (lines 381-382)

Old (lines 381-382):
```html
    <link rel=" stylesheet " href=" https://use.fontawesome.com/releases/v5.7.1/css/all.css "
        integrity=" sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr " crossorigin=" anonymous ">
```

Remove those two lines.

---

### Task 2: Remove WhatsApp widget

**Files:**
- Modify: `index.html:24-75`

- [ ] **Remove entire `#whatswidget-pre-wrapper` div** (lines 24-75)

Delete all lines from `<div id="whatswidget-pre-wrapper" class="">` through the closing `</div>` before the `<div class="main">` section.

---

### Task 3: Add Statistics Bar section

**Files:**
- Modify: `index.html` (insert new section between Sobre `</section>` and Habilidades `<section id="2">`)

- [ ] **Insert statistics bar after the Sobre section (after `</section>` on line 141)**

```html
        <!-- Stats -->
        <section class="bg-white stats-section">
            <div class="container py-4">
                <div class="row text-center">
                    <div class="col-6 col-lg-3 mb-3 mb-lg-0 stat-item">
                        <div class="stat-number">8+</div>
                        <div class="stat-label">anos de experiência</div>
                    </div>
                    <div class="col-6 col-lg-3 mb-3 mb-lg-0 stat-item">
                        <div class="stat-number">17+</div>
                        <div class="stat-label">projetos realizados</div>
                    </div>
                    <div class="col-6 col-lg-3 mb-3 mb-lg-0 stat-item">
                        <div class="stat-number">8+</div>
                        <div class="stat-label">linguagens</div>
                    </div>
                    <div class="col-6 col-lg-3 mb-3 mb-lg-0 stat-item">
                        <div class="stat-number">6+</div>
                        <div class="stat-label">certificações</div>
                    </div>
                </div>
            </div>
        </section>
```

---

### Task 4: Replace portfolio section with project cards

**Files:**
- Modify: `index.html` (replace sections `#3`, lines 202-235)

- [ ] **Replace the portfolio section entirely**

Old (lines 202-235):
```html
        <section id="3" class="bg-white">
            ...
        </section>
```

New:
```html
        <section id="3" class="bg-light">
            <div class="d-flex h-100 align-items-center">
                <div class="container">
                    <div class="text-center">
                        <h2 class="text-uppercase lined">Portfólio</h2>
                        <p class="text-muted">Projetos em destaque</p>
                    </div>
                    <div class="row g-4">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card h-100 shadow-sm project-card">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">LLM Data ORM</h5>
                                    <p class="text-muted small">ago 2024 - jul 2025</p>
                                    <p class="card-text flex-grow-1">Biblioteca Java para automação de ETL de dados não estruturados (PDF, DOCX, HTML) para bancos relacionais usando LLMs como motor de transformação. TCC com artigo publicado.</p>
                                    <div class="mb-2">
                                        <span class="badge bg-primary me-1">Java</span>
                                        <span class="badge bg-secondary me-1">LLM</span>
                                        <span class="badge bg-secondary">RAG</span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <a href="https://github.com/leon-junio/llm-data-orm" target="_blank" class="btn btn-outline-dark btn-sm"><i class="fab fa-github"></i> GitHub</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card h-100 shadow-sm project-card">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">Pap Smear Classifier</h5>
                                    <p class="text-muted small">mar 2024 - jun 2024</p>
                                    <p class="card-text flex-grow-1">Classificador de células em exames de Papanicolau usando SVM e EfficientNet. Interface Java + classificadores Python para diagnóstico precoce de câncer cervical.</p>
                                    <div class="mb-2">
                                        <span class="badge bg-primary me-1">Python</span>
                                        <span class="badge bg-secondary me-1">Java</span>
                                        <span class="badge bg-secondary">SVM</span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <a href="https://github.com/leon-junio" target="_blank" class="btn btn-outline-dark btn-sm"><i class="fab fa-github"></i> GitHub</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card h-100 shadow-sm project-card">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">License Plate Recognition</h5>
                                    <p class="text-muted small">fev 2024 - jun 2024</p>
                                    <p class="card-text flex-grow-1">Sistema de reconhecimento de placas veiculares e emissão automática de multas usando YOLOv8 e EasyOCR. Visão computacional aplicada.</p>
                                    <div class="mb-2">
                                        <span class="badge bg-primary me-1">Python</span>
                                        <span class="badge bg-secondary me-1">YOLOv8</span>
                                        <span class="badge bg-secondary">EasyOCR</span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <a href="https://github.com/leon-junio" target="_blank" class="btn btn-outline-dark btn-sm"><i class="fab fa-github"></i> GitHub</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card h-100 shadow-sm project-card">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">DMutex Simulator</h5>
                                    <p class="text-muted small">abr 2024 - mai 2024</p>
                                    <p class="card-text flex-grow-1">Simulador de exclusão mútua distribuída com algoritmo DMutex. Processos como threads Runnable com fila de requisições para seção crítica.</p>
                                    <div class="mb-2">
                                        <span class="badge bg-primary me-1">Java</span>
                                        <span class="badge bg-secondary">Threads</span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <a href="https://github.com/leon-junio" target="_blank" class="btn btn-outline-dark btn-sm"><i class="fab fa-github"></i> GitHub</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card h-100 shadow-sm project-card">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">PKCS12 Vault Tool</h5>
                                    <p class="text-muted small">jan 2024 - mai 2024</p>
                                    <p class="card-text flex-grow-1">Ferramenta Java para criar e ler arquivos PKCS#12 como cofre pessoal de chaves criptográficas. Pode ser usada como library embed ou CLI.</p>
                                    <div class="mb-2">
                                        <span class="badge bg-primary me-1">Java</span>
                                        <span class="badge bg-secondary">Criptografia</span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <a href="https://github.com/leon-junio" target="_blank" class="btn btn-outline-dark btn-sm"><i class="fab fa-github"></i> GitHub</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card h-100 shadow-sm project-card">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">Saúde+</h5>
                                    <p class="text-muted small">out 2021 - mai 2024</p>
                                    <p class="card-text flex-grow-1">Sistema integrado de gestão em saúde municipal. Cadastro de pacientes, almoxarifado, logística de frotas. Processa dados de 45k+ pacientes e 1k+ produtos.</p>
                                    <div class="mb-2">
                                        <span class="badge bg-primary me-1">Java</span>
                                        <span class="badge bg-secondary me-1">Spring Boot</span>
                                        <span class="badge bg-secondary">MySQL</span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <a href="https://saudeplus.leonjr.dev" target="_blank" class="btn btn-outline-dark btn-sm"><i class="fas fa-external-link-alt"></i> Demo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4 text-center">
                        <a href="https://github.com/leon-junio" target="_blank" class="btn btn-outline-dark">Veja mais projetos no GitHub <i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </section>
```

---

### Task 5: Add Certifications grid

**Files:**
- Modify: `index.html` (insert new section between Portfólio `</section>` and Destaques `<section id="4">`)

- [ ] **Insert certifications section after portfolio**

```html
        <!-- Certifications -->
        <section class="bg-white">
            <div class="d-flex h-100 align-items-center">
                <div class="container">
                    <header class="mb-5 text-center">
                        <h2 class="text-uppercase lined">Certificações</h2>
                    </header>
                    <div class="row g-4 justify-content-center">
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="cert-card text-center p-4 h-100 shadow-sm">
                                <i class="fab fa-aws fa-3x mb-3" style="color:#FF9900;"></i>
                                <h6>AWS Academy Cloud Foundations</h6>
                                <p class="text-muted small mb-2">Amazon Web Services — 2024</p>
                                <a href="#" target="_blank" class="btn btn-outline-primary btn-sm">Credencial</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="cert-card text-center p-4 h-100 shadow-sm">
                                <i class="fas fa-shield-alt fa-3x mb-3" style="color:#049FD9;"></i>
                                <h6>Endpoint Security</h6>
                                <p class="text-muted small mb-2">Cisco — 2024</p>
                                <a href="#" target="_blank" class="btn btn-outline-primary btn-sm">Credencial</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="cert-card text-center p-4 h-100 shadow-sm">
                                <i class="fas fa-network-wired fa-3x mb-3" style="color:#CF0A2C;"></i>
                                <h6>ICT Academy Computer Networks</h6>
                                <p class="text-muted small mb-2">Huawei — 2023</p>
                                <a href="#" target="_blank" class="btn btn-outline-primary btn-sm">Credencial</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="cert-card text-center p-4 h-100 shadow-sm">
                                <i class="fab fa-redhat fa-3x mb-3" style="color:#CC0000;"></i>
                                <h6>Red Hat OpenShift I (DO180)</h6>
                                <p class="text-muted small mb-2">Red Hat — 2023</p>
                                <a href="#" target="_blank" class="btn btn-outline-primary btn-sm">Credencial</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="cert-card text-center p-4 h-100 shadow-sm">
                                <i class="fab fa-redhat fa-3x mb-3" style="color:#CC0000;"></i>
                                <h6>Red Hat System Administration II</h6>
                                <p class="text-muted small mb-2">Red Hat — 2023</p>
                                <a href="#" target="_blank" class="btn btn-outline-primary btn-sm">Credencial</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="cert-card text-center p-4 h-100 shadow-sm">
                                <i class="fas fa-network-wired fa-3x mb-3" style="color:#049FD9;"></i>
                                <h6>CCNA: Introduction to Networks</h6>
                                <p class="text-muted small mb-2">Cisco — 2023</p>
                                <a href="#" target="_blank" class="btn btn-outline-primary btn-sm">Credencial</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
```

---

### Task 6: Redesign Contact section

**Files:**
- Modify: `index.html` (replace section `#5`, lines 287-346)

- [ ] **Replace contact section**

Old (lines 287-346):
```html
        <section id="5" class="bg-gray">
            ...
        </section>
```

New:
```html
        <section id="5" class="bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-12 align-items-center text-center">
                        <h2 class="text-uppercase lined">Contato</h2>
                        <p class="lead mb-4">Vamos conversar! Estou disponível para novas oportunidades, parcerias ou um café ☕</p>
                        <div class="redes-sociais mb-4">
                            <a href="https://www.linkedin.com/in/leonjrmartins/" target="_blank" class="btn btn-outline-dark mx-2 mb-2">
                                <i class="fab fa-linkedin"></i> LinkedIn
                            </a>
                            <a href="https://github.com/leon-junio" target="_blank" class="btn btn-outline-dark mx-2 mb-2">
                                <i class="fab fa-github"></i> GitHub
                            </a>
                            <a href="https://www.youtube.com/channel/UCjLj-ZZKSv5Fd05AzSVajiw" target="_blank" class="btn btn-outline-dark mx-2 mb-2">
                                <i class="fab fa-youtube"></i> YouTube
                            </a>
                        </div>
                        <a href="https://wa.me/5533998597550" target="_blank" class="btn btn-success btn-lg px-5">
                            <i class="fab fa-whatsapp"></i> Fale comigo no WhatsApp
                        </a>
                    </div>
                </div>
            </div>
            <footer>
                <div class="bg-darker py-4 mt-5">
                    <div class="container text-center">
                        <p class="mb-0 text-muted text-small">&copy; Todos os direitos reservados. Desenvolvido por
                            <a href="https://www.instagram.com/leonjrmartins/?hl=pt-br">Leon</a> 2026.
                        </p>
                    </div>
                </div>
            </footer>
        </section>
```

---

### Task 7: Fix HTML typos and spacing issues

**Files:**
- Modify: `index.html`

- [ ] **Fix `text-mted` → `text-muted`** throughout the file (appears on lines 171, 179, 188, 195, 207)

Replace all 5 occurrences of `text-mted` with `text-muted`.

- [ ] **Fix attribute spacing** — remove spaces inside attribute quotes. Replace:
  - `type=" text "` → `type="text"` (lines 306, 307, 311, 315, 316, 321)
  - `name=" firstname "` → `name="firstname"` (line 306)
  - `name=" lastname "` → `name="lastname"` (line 311)
  - `name=" email "` → `name="email"` (line 316)
  - `name=" message "` → `name="message"` (line 321)

- [ ] **Remove modal** (lines 348-373) since the Saúde+ download modal references old form — delete the entire `.modal` div

---

### Task 8: Rewrite custom.css with new section styles + dark mode

**Files:**
- Rewrite: `css/custom.css`

- [ ] **Rewrite `css/custom.css`**

```css
/* Project cards */
.project-card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    border: none;
    border-radius: 8px;
}

.project-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.15) !important;
}

.project-card .card-title {
    font-size: 1.1rem;
    font-weight: 700;
}

/* Stats section */
.stats-section {
    padding: 2.5rem 0;
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 700;
    font-family: "Montserrat", sans-serif;
    color: #4fbfa8;
    line-height: 1.2;
}

.stat-label {
    font-size: 0.9rem;
    color: #6c757d;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

/* Cert cards */
.cert-card {
    border-radius: 8px;
    border: none;
    background: #fff;
    transition: transform 0.2s ease;
}

.cert-card:hover {
    transform: translateY(-3px);
}

/* Dark mode - default follows OS */
:root {
    --bg-primary: #fff;
    --bg-secondary: #f8f9fa;
    --bg-gray: #eee;
    --bg-darker: #343a40;
    --text-primary: #212529;
    --text-muted: #6c757d;
    --card-bg: #fff;
    --card-border: rgba(0, 0, 0, 0.075);
    --hero-overlay: rgba(0, 0, 0, 0.3);
}

@media (prefers-color-scheme: dark) {
    :root {
        --bg-primary: #1a1a2e;
        --bg-secondary: #16213e;
        --bg-gray: #0f3460;
        --bg-darker: #0a0a1a;
        --text-primary: #e0e0e0;
        --text-muted: #a0a0b0;
        --card-bg: #16213e;
        --card-border: rgba(255, 255, 255, 0.1);
        --hero-overlay: rgba(0, 0, 0, 0.5);
    }

    body {
        background-color: var(--bg-primary);
        color: var(--text-primary);
    }

    .bg-white {
        background-color: var(--bg-primary) !important;
    }

    .bg-light {
        background-color: var(--bg-secondary) !important;
    }

    .bg-gray {
        background-color: var(--bg-gray) !important;
    }

    .bg-darker {
        background-color: var(--bg-darker) !important;
    }

    .text-muted,
    .text-mted {
        color: var(--text-muted) !important;
    }

    .card {
        background-color: var(--card-bg) !important;
        border-color: var(--card-border) !important;
    }

    .shadow-sm {
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.3) !important;
    }

    .hero .dark-overlay {
        background: var(--hero-overlay);
    }

    .text-gray {
        color: var(--text-muted) !important;
    }

    .bg-primary {
        background-color: #4fbfa8 !important;
    }

    .btn-outline-dark {
        color: var(--text-primary);
        border-color: var(--text-primary);
    }

    .btn-outline-dark:hover {
        color: #1a1a2e;
        background-color: var(--text-primary);
    }

    .cert-card {
        background-color: var(--card-bg) !important;
    }

    #style-switch {
        background: var(--card-bg);
        border-color: var(--card-border);
    }
}

/* Dark mode toggle button */
#dark-mode-toggle {
    position: fixed;
    top: 20px;
    right: 20px;
    z-index: 9999;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: none;
    background: #4fbfa8;
    color: #fff;
    font-size: 1.1rem;
    cursor: pointer;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
    transition: transform 0.2s;
    display: flex;
    align-items: center;
    justify-content: center;
}

#dark-mode-toggle:hover {
    transform: scale(1.1);
}

/* Responsive: keep nav buttons visible on mobile */
@media (max-width: 1000px) {
    #btn-contato,
    #btn-port {
        display: inline-block !important;
    }
}
```

---

### Task 9: Rewrite main.js with dark mode toggle

**Files:**
- Rewrite: `js/main.js`

- [ ] **Rewrite `js/main.js`**

```js
(function () {
    const toggle = document.createElement('button');
    toggle.id = 'dark-mode-toggle';
    toggle.setAttribute('aria-label', 'Alternar modo escuro');
    toggle.innerHTML = '<i class="fas fa-moon"></i>';
    document.body.appendChild(toggle);

    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)');
    const stored = localStorage.getItem('dark-mode');

    function applyTheme(dark) {
        if (dark) {
            document.documentElement.setAttribute('data-theme', 'dark');
            toggle.innerHTML = '<i class="fas fa-sun"></i>';
        } else {
            document.documentElement.removeAttribute('data-theme');
            toggle.innerHTML = '<i class="fas fa-moon"></i>';
        }
    }

    if (stored !== null) {
        applyTheme(stored === 'true');
    } else {
        applyTheme(prefersDark.matches);
    }

    toggle.addEventListener('click', function () {
        const currentlyDark = document.documentElement.getAttribute('data-theme') === 'dark';
        const newDark = !currentlyDark;
        applyTheme(newDark);
        localStorage.setItem('dark-mode', newDark);
    });

    // Dark mode listener for index.html
    document.getElementById('download-bt').addEventListener('click', function () {
        window.open("https://saudeplus.leonjr.dev:8025/saude+/downloads/sms-app.rar", "_self");
    });
})();
```

- [ ] **Update index.html script references** — remove the jQuery script tag at line 374 since we no longer use jQuery in main.js

Actually, keep jQuery since Bootstrap JS bundle depends on it (but Bootstrap 5 doesn't need jQuery). Let me check — Bootstrap 5 doesn't require jQuery. But remove it if nothing else uses it.

The jQuery on line 374 is loaded but not used anywhere in the code (main.js doesn't use it, Bootstrap 5 doesn't need it). Remove it.

---

### Task 10: Clean up unused CSS files

- [ ] **Delete `css/control.css`** — duplicated content from `css/custom.css`
- [ ] **Delete `css/whats.css`** — WhatsApp widget styles (widget removed)
- [ ] **Delete `css/styles.css`** — unused legacy styles

---

### Task 11: Add dark mode toggle button to index.html

**Files:**
- Modify: `index.html` (add toggle button after `<body>`)

- [ ] **The toggle button is now created dynamically in JS** — no HTML needed. The JS in Task 9 creates it.

---

### Task 12: Section order verification

**Files:**
- Modify: `index.html`

- [ ] **Verify final section order:** Hero → Sobre → Statistics → Habilidades → Portfolio → Certificacoes → Destaques → Contato
