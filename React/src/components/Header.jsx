import { useContext } from "react";
import { PanierContext } from "../store/panier-context";
import CartModal from "./CartModal";

const Header = () => {
    const { items } = useContext(PanierContext)
    return (
        <>
        <CartModal/>
        <header>
            <ul>
                <li className="appName">My shop</li>
                <li>
                    <button>Panier ({items.length})</button>
                </li>
            </ul>
        </header>
        </>
    )
}

export default Header;