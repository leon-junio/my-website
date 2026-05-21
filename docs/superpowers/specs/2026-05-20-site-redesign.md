# Site Redesign — leonjr.dev

Date: 2026-05-20

## Approach

**Abordagem 1 — Evolução do atual.** Manter Bootstrap 5, jQuery, Lottie. Adicionar novas seções e melhorias incrementais sobre a base existente. Menor risco, entrega mais rápida.

## Changes

### 1. SEO & Meta

- `<title>`: "Leon Junio Martins Ferreira — Desenvolvedor Full Stack & Portfólio"
- `<meta name="description">` com resumo rico (cargo, stack, formação IFMG + PUC Minas, empresa atual NG.CASH)
- `<meta name="keywords">`: Java, Node.js, Spring Boot, React, TypeScript, full stack, engenheiro de software
- Open Graph tags: `og:title`, `og:description`, `og:image`, `og:type`, `og:url`
- JSON-LD structured data (schema.org/Person + schema.org/WebSite) — essencial para LLMs e Google
- `<link rel="canonical" href="https://leonjr.dev">`
- Favicon atualizado

### 2. Portfolio Cards (seção #3)

Substituir lista de botões por grid de 6 cards com `row-cols-1 row-cols-md-2 row-cols-lg-3`:

| Projeto | Período | Stack |
|---------|---------|-------|
| LLM Data ORM | ago 2024 - jul 2025 | Java, LLM, RAG |
| Pap Smear Classifier | mar 2024 - jun 2024 | Python, Java, SVM, EfficientNet |
| License Plate Recognition | fev 2024 - jun 2024 | Python, YOLOv8, EasyOCR |
| DMutex Simulator | abr 2024 - mai 2024 | Java, Threads |
| PKCS12 Vault Tool | jan 2024 - mai 2024 | Java |
| Saúde+ | out 2021 - mai 2024 | Java, Spring Boot, MySQL, PHP |

Cada card: screenshot/placeholder, título, descrição (2-3 linhas), tech stack em badges, links (GitHub/demo). Efeito hover de elevação.

### 3. Statistics Bar

Entre Sobre e Habilidades, barra horizontal com 4 métricas:
- 8+ anos de experiência
- 17+ projetos
- 8+ linguagens
- 6+ certificações

Ícones FontAwesome, números grandes, labels abaixo.

### 4. Certifications Grid

Abaixo do portfólio, grid de 6 badges:

| Certificação | Instituição | Ano |
|-------------|------------|-----|
| AWS Academy Cloud Foundations | AWS | 2024 |
| Endpoint Security | Cisco | 2024 |
| ICT Academy Computer Networks | Huawei | 2023 |
| Red Hat OpenShift I (DO180) | Red Hat | 2023 |
| Red Hat System Administration II (RH134) | Red Hat | 2023 |
| CCNA: Introduction to Networks | Cisco | 2023 |

Layout: cards compactos com logo da instituição, nome do curso, link para credencial. Grid 3 colunas.

### 5. Contact Section (seção #5)

- Remover formulário de contato (não funcional)
- Remover WhatsApp widget (`#whatswidget-pre-wrapper`)
- Manter ícones de redes sociais (LinkedIn, GitHub, YouTube)
- Adicionar CTA "Fale comigo no WhatsApp" com link `wa.me/5533998597550`
- Layout limpo, centralizado

### 6. Dark Mode

- Tema padrão: seguir `prefers-color-scheme` do OS
- Toggle manual via botão no header para sobrescrever
- CSS variables para troca limpa entre temas (variáveis Bootstrap sobrescritas)
- Persistência da preferência em `localStorage`

### 7. Layout & Code Fixes

- Seção Destaques (#4): adicionar `gap` entre cards
- Corrigir `text-mted` → `text-muted` (typo em todo o HTML)
- Remover espaços estranhos em atributos (`type=" text "` → `type="text"`)
- Ajustar/remover Lottie de fundo na seção Sobre (z-index conflita com foto)
- Botões de navegação responsivos (não ocultar em mobile)
- Limpar CSS não utilizado (`control.css`, `whats.css`, `styles.css`)
- Remover duplicata do link FontAwesome no final do body (já está no head)

### 8. Section Order

Hero → Sobre → Statistics → Habilidades → Portfólio → Certificações → Destaques → Contato

## Non-Goals

- Não migrar para SSG/framework JS
- Não adicionar blog
- Não refatorar para CSS puro
- Não mexer na estrutura de deploy/hosting

## Out of Scope (future)

- Página de blog técnico
- Integração GitHub API para activity feed
- Download de currículo em PDF
