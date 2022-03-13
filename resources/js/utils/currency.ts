export const formatCurrency = (value: number) : string => {

  return new Intl.NumberFormat("fr-FR", {
        style: "currency",
        currency: "EUR",
    }).format(value)

}

export const getTotalPrice = (quantity: number, price: number) : number => {
  return quantity * (price * 100)
}