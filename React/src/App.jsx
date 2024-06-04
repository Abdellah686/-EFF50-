import './App.css'
import Header from './components/Header'
import Products from './components/Products'
import { PanierContextProvider } from './store/panier-context'

function App() {

  return (
    <>
    <PanierContextProvider>
      <Header />
      <Products/>
    </PanierContextProvider>
    </>
  )
}

export default App
