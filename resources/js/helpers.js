export function formatDate(dateString, dateStyle = 'long'){
  const date = new Date(dateString);
  return new Intl.DateTimeFormat('pt-BR', { dateStyle }).format(date);
}